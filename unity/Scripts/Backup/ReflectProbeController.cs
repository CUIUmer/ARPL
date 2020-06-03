using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ReflectProbeController : MonoBehaviour
{
    public enum Directions{X, Y, Z};

    public Directions orientation;
    public GameObject Mirror;
    public GameObject Object;

    float offset;
    Vector3 probePos;

    // Update is called once per frame
    void Update()
    {

        if (orientation == Directions.X) {
            offset = Mirror.transform.position.x - Object.transform.position.x;

            probePos.x = Mirror.transform.position.x + offset;
            probePos.y = Object.transform.position.y;
            probePos.z = Object.transform.position.z;
        }

        if (orientation == Directions.Y)
        {
            offset = Mirror.transform.position.y - Object.transform.position.y;

            probePos.x = Object.transform.position.x;
            probePos.y = Mirror.transform.position.y + offset;
            probePos.z = Object.transform.position.z;
        }

        if (orientation == Directions.Z)
        {
            offset = Mirror.transform.position.z - Object.transform.position.z;

            probePos.x = Object.transform.position.x;
            probePos.y = Object.transform.position.y;
            probePos.z = Mirror.transform.position.z + offset;
        }

        transform.position = probePos;

    }
}
