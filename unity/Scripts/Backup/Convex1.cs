using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Convex1 : MonoBehaviour
{
    public GameObject Object;
    public GameObject Lens;
    public GameObject Image;
    public GameObject obj;
    //public GameObject objFlame;
    private Vector3 Pos;

    [SerializeField] private float fadePerSecond = 2.5f;

    // Start is called before the first frame update
    void Start()
    {
        //Pos = transform.position;
        Pos = new Vector3(0, 0, -0.48f);
        //Pos = new Vector3(0, 0, 0);

        Material m = obj.GetComponent<MeshRenderer>().material;
        //Debug.Log(m.GetFloat("_Mode"));
        //m.SetFloat("_Mode", 2.0f);

        m.SetFloat("_Mode", 2);
        m.SetInt("_SrcBlend", (int)UnityEngine.Rendering.BlendMode.SrcAlpha);
        m.SetInt("_DstBlend", (int)UnityEngine.Rendering.BlendMode.OneMinusSrcAlpha);
        m.SetInt("_ZWrite", 0);
        m.DisableKeyword("_ALPHATEST_ON");
        m.EnableKeyword("_ALPHABLEND_ON");
        m.DisableKeyword("_ALPHAPREMULTIPLY_ON");
        m.renderQueue = 3000;


        //Flame
        //Material mF = objFlame.GetComponent<MeshRenderer>().material;
        //mF.SetFloat("_Mode", 2);
        //mF.SetInt("_SrcBlend", (int)UnityEngine.Rendering.BlendMode.SrcAlpha);
        //mF.SetInt("_DstBlend", (int)UnityEngine.Rendering.BlendMode.OneMinusSrcAlpha);
        //mF.SetInt("_ZWrite", 0);
        //mF.DisableKeyword("_ALPHATEST_ON");
        //mF.EnableKeyword("_ALPHABLEND_ON");
        //mF.DisableKeyword("_ALPHAPREMULTIPLY_ON");
        //mF.renderQueue = 3000;


        //obj.GetComponent<MeshRenderer>().material = m;
    }

    // Update is called once per frame
    void Update()
    {
        if ((Object.transform.position.y <= Image.transform.position.y && Image.transform.position.y < 0.01f) && (Object.transform.position.y <= Lens.transform.position.y && Lens.transform.position.y < 0.01f))
        {
            //Debug.Log(Object.transform.position.x);
            //Debug.Log(Object.transform.position.y);
            //Debug.Log(Object.transform.position.z);
            //Debug.Log(Lens.transform.position.x);
            //Debug.Log(Lens.transform.position.y);
            //Debug.Log(Lens.transform.position.z);

            float x = transform.position.x;
            float y = transform.position.y;
            float z = transform.position.z;

            Vector3 temp = new Vector3(x, y, z);
            Vector3 temp1 = new Vector3(x, 0.9f, z);
            //transform.position = Pos;
            //transform.eulerAngles = new Vector3(90, transform.eulerAngles.y, transform.eulerAngles.z);
            //Scale
            Vector3 scale = transform.localScale;
            scale.Set(0.2f, 0.1f, 1);
            transform.localScale = scale;

            //Distance
            float distanceCI = Vector3.Distance(Object.transform.position, transform.position);
            Debug.Log("Object, Image: " + distanceCI);
            //  imp
            float distanceCL = Vector3.Distance(Object.transform.position, Lens.transform.position);
            Debug.Log("Object, Lens: " + distanceCL);
            float distanceLI = Vector3.Distance(Lens.transform.position, transform.position);
            Debug.Log("Lens, Image: " + distanceLI);
            //  imp
            float distanceLS = Vector3.Distance(Lens.transform.position, Image.transform.position);
            Debug.Log("Lens, Screen: " + distanceLS);
            float distanceCS = Vector3.Distance(Object.transform.position, Image.transform.position);
            Debug.Log("Object, Screen: " + distanceCS);

            //Distance Conditions
            if ((distanceCL <= 0.30 && distanceCL >= 0.27) && (distanceLS <= 0.31 && distanceLS >= 0.28))
            {
                Debug.Log("if 1!");
                //StartCoroutine(FadeTo(1.0f, 1.0f));
                StartCoroutine(FadeTo(0.99f, 1.0f));
            }
            else if ((distanceCL <= 0.17 && distanceCL >= 0.15) && (distanceLS <= 0.16 && distanceLS >= 0.14))
            {
                Debug.Log("if 2!");
                StartCoroutine(FadeTo(0.99f, 1.0f));
                //StartCoroutine(FadeTo(1.0f, 1.0f));
            }
            //if ((distanceCL > 0.33 || distanceCL < 0.31) || (distanceLS > 0.31 || distanceLS < 0.29))
            else
            {
                Debug.Log("Else!");
                StartCoroutine(FadeTo(0.2f, 1.0f));
                //StartCoroutine(FadeTo(0.1f, 1.0f));
            }

            //
            //var mat = obj.GetComponent<MeshRenderer>().material;
            //Debug.Log(mat.GetFloat("_Mode"));
            //mat.SetFloat("_Mode", 3.0f);

            //Alpha
            //this.GetComponent<MeshRenderer>().material.color = new Color(0.5f, 0.5f, 0.5f, 0.5f);
            //StartCoroutine(FadeTo(0.3f, 1.0f));// -------------Working---------------
            //StartCoroutine(FadeTo(1.0f, 0.5f));
            //StartCoroutine(FadeTo(1.0f, 1.0f));

            //var material = obj.GetComponent<MeshRenderer>().material;
            //var color = material.color;
            //material.color = new Color(color.r, color.g, color.b, color.a - (fadePerSecond * Time.deltaTime));

        }
        else
        {
            //Vector3 temp1 = new Vector3(0, 0, 0);
            //transform.position = temp1;
            //Scale
            Vector3 scale = transform.localScale;
            scale.Set(0.2f, 0.1f, 0.1f);
            transform.localScale = scale;
        }
    }

    IEnumerator FadeTo(float aValue, float aTime)
    {
        float alpha = obj.GetComponent<Renderer>().material.color.a;
        for (float t = 0.0f; t < 1.0f; t += Time.deltaTime / aTime)
        {
            Color newColor = new Color(1, 1, 1, Mathf.Lerp(alpha, aValue, t));
            obj.GetComponent<Renderer>().material.color = newColor;
            yield return null;
        }

        // Flame
        //float beta = objFlame.GetComponent<Renderer>().material.color.a;
        //for (float t = 0.0f; t < 1.0f; t += Time.deltaTime / aTime)
        //{
        //    Color newColor = new Color(1, 1, 1, Mathf.Lerp(beta, aValue, t));
        //    objFlame.GetComponent<Renderer>().material.color = newColor;
        //    yield return null;
        //}
    }

}
