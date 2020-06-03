using System.Collections;
using System.Collections.Generic;
using UnityEngine;

[RequireComponent(typeof(LineRenderer))]
public class LawOfReflection : MonoBehaviour
{
    //  Class Variables
    public int reflections;
    public float maxLength;

    private LineRenderer lineRenderer;
    private Ray ray;
    private RaycastHit hit;
    private Vector3 direction;

    //  Awake function
    private void Awake()
    {
        //  Get Line Renderer automatically
        lineRenderer = GetComponent<LineRenderer>();
    }

    //  Start is called before the first frame update
    void Start()
    {

    }

    //  Update is called once per frame
    void Update()
    {
        //  Ray for reflection
        ray = new Ray(transform.position, transform.forward);

        //  Set the number of vertices, line should follow
        lineRenderer.positionCount = 1;

        //  Set the start position of first vertex
        lineRenderer.SetPosition(0, transform.position);

        //  Remaining length of line renderer
        float remainingLength = maxLength;

        //  Loop iterates till the number of reflections
        for (int i = 0; i < reflections; i++)
        {
            //  Check if the ray hit something
            if (Physics.Raycast(ray.origin, ray.direction, out hit, remainingLength))
            {
                lineRenderer.positionCount += 1;
                lineRenderer.SetPosition(lineRenderer.positionCount - 1, hit.point);
                remainingLength -= Vector3.Distance(ray.origin, hit.point);
                ray = new Ray(hit.point, Vector3.Reflect(ray.direction, hit.normal));
                if (hit.collider.tag != "Mirror")
                {
                    break;
                }
            }
            else
            {
                lineRenderer.positionCount += 1;
                lineRenderer.SetPosition(lineRenderer.positionCount - 1, ray.origin + ray.direction * remainingLength);
            }
        }
    }
}
