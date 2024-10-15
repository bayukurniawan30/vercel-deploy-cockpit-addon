<?php

namespace VercelDeploy\Controller;

use App\Controller\App;

class DeployController extends App
{
    public function index()
    {
        $this->helper('theme')->favicon('assets:console.svg');

        return $this->render('verceldeploy:views/deployment.php');
    }

    public function deployFrontEnd()
    {
        // Vercel deploy hook URL
        // Read more at https://vercel.com/docs/deployments/deploy-hooks
        $url = "";

        // Initialize a cURL session
        $ch = curl_init($url);

        // Empty JSON object
        $payload = json_encode(new \stdClass());

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload),
        ]);

        // Execute the request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        // Close the cURL session
        curl_close($ch);

        // Return the response
        return $response;
    }
}
