using System;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Signin : MonoBehaviour
{
    //  Label
    public Text label;

    // Input fields
    public InputField rollNoField;
    public InputField passField;

    // Buttons
    public Button signinButton;
    public Button backButton;

    //  Error
    private String error;

    // Start is called before the first frame update
    void Start()
    {
        rollNoField.ActivateInputField();
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
    public void CallSignin()
    {
        if (signinButton.interactable)
        {
            StartCoroutine(SignIn());
        }
    }

    IEnumerator SignIn()
    {
        // Registration Form
        WWWForm form = new WWWForm();
        form.AddField("rollNo", rollNoField.text);
        form.AddField("password", passField.text);
        form.AddField("submit", "Submit");

        // Submit form to url with WWW Request
        WWW www = new WWW("http://localhost/arpl/Student/login", form);
        yield return www;

        String[] spearator = { "<html>" };
        Int32 count = 2;

        String[] strlist = www.text.Split(spearator, count,
               StringSplitOptions.RemoveEmptyEntries);
        if (String.Equals(strlist[0], "success"))
        {
            Debug.Log("LoggedIn");
            Debug.Log("text: " + www.text);
            label.text = "Login Successfull";
            UnityEngine.SceneManagement.SceneManager.LoadScene(3);
        }
        else
        {
            Debug.Log("Login Failed!");
            error = strlist[0];
            Debug.Log("text: " + www.text);

            if (error != null)
            {

                if (error.Contains("Invalid Roll Number/ Password"))
                {
                    passField.ActivateInputField();
                }
                label.text = error;
            }
        }

    }

    // Validate Input Fields
    public void ValidateInputs()
    {
        if (rollNoField.text.Length > 2 && passField.text.Length > 7)
        {
            signinButton.interactable = true;
        }
        else
        {
            signinButton.interactable = false;
        }
    }

}
