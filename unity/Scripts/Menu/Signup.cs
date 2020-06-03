using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;
using UnityEngine.Networking;
using System;

public class Signup : MonoBehaviour
{
    //  Label
    public Text label;

    // Input fields
    public InputField nameField;
    public InputField rollNoField;
    public InputField classCodeField;
    public InputField passField;
    public InputField rePassField;

    // Buttons
    public Button registerButton;
    public Button backButton;

    //  Error
    private String error;

    private void Awake()
    {
        //label = GetComponent<UnityEngine.UI.Text>();
    }

    // Start is called before the first frame update
    void Start()
    {
        nameField.ActivateInputField();
        Text label = GetComponent<Text>();
    }

    // Update is called once per frame
    void Update()
    {

    }

    // Back
    public void Back()
    {
        UnityEngine.SceneManagement.SceneManager.LoadScene(0);
    }

    // Signup
    public void CallRegister()
    {
        if (registerButton.interactable)
        {
            StartCoroutine(Register());
        }
    }

    IEnumerator Register()
    {
        // Registration Form
        WWWForm form = new WWWForm();
        form.AddField("name", nameField.text);
        form.AddField("rollNo", rollNoField.text);
        form.AddField("password", passField.text);
        form.AddField("classCode", classCodeField.text);
        form.AddField("submit", "Submit");



        //  Submit form to url with UnityWebRequest
        //UnityWebRequest www = UnityWebRequest.Post("http://localhost/arpl/Student/register", form);
        //yield return www.SendWebRequest();
        //if (www.isNetworkError || www.isHttpError)
        //{
        //    Debug.Log(www.error);
        //}
        //else
        //{
        //    Debug.Log("Tos: " + www.ToString());
        //    Debug.Log("Res: " + www.GetResponseHeaders());
        //    String[] spearator = { "<html>" };
        //    Int32 count = 2;
        //    String[] strlist = www.ToString.Split(spearator, count, StringSplitOptions.RemoveEmptyEntries);
        //    if (string.equals(strlist[0], "success"))
        //    {
        //        Debug.Log("you are registered");
        //        UnityEngine.SceneManagement.SceneManager.LoadScene(0);
        //    }
        //    else
        //    {
        //        Debug.Log("registration failed!");
        //        Debug.Log("text: " + www.text);
        //    }
        //}

        // Submit form to url with WWW Request
        WWW www = new WWW("http://localhost/arpl/Student/register", form);
        yield return www;

        String[] spearator = { "<html>" };
        Int32 count = 2;

        String[] strlist = www.text.Split(spearator, count,
               StringSplitOptions.RemoveEmptyEntries);
        if (String.Equals(strlist[0], "success"))
        {
            Debug.Log("You are registered");
            //UnityEngine.SceneManagement.SceneManager.LoadScene(0);
            label.text = "Registered Successfully!";
        }
        else
        {
            Debug.Log("Registration Failed!");
            error = strlist[0];
            Debug.Log("text: " + www.text);

            if (error != null)
            {
                if (Equals(error, "Roll No already exists!"))
                {
                    label.text = "Roll No already exists!";
                    rollNoField.ActivateInputField();
                }
                if (Equals(error, "Invalid Class Code!"))
                {
                    label.text = "Invalid Class Code!";
                    classCodeField.ActivateInputField();
                }
                label.text = error;
            }

        }


    }

    // Validate Input Fields
    public void ValidateInputs()
    {
        if ((nameField.text.Length > 2 && rollNoField.text.Length > 0 && classCodeField.text.Length > 4 && passField.text.Length > 7 && rePassField.text.Length > 7) && (passField.text == rePassField.text))
        {
            registerButton.interactable = true;
        }
        else
        {
            registerButton.interactable = false;
        }

    }

    //  Confirm Password
    public bool ConfirmPassword()
    {
        return (Equals(passField.text, rePassField.text));
    }

    public void validateName()
    {
    }
}
