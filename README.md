# Cockpit Addons - Vercel Deploy Trigger

This repository is an addon for Cockpit CMS. Support Cockpit CMS version 2.

### How to Install

1. Make sure you have Cockpit CMS version `2.x.x` installed.
2. Copy this repository content into `addons/VercelDeploy`
3. Get your Vercel deploy hook trigger URL. Please read [this](https://vercel.com/docs/deployments/deploy-hooks) to get how to create it.
4. Update the `$url` value in **DeployController.php** file, at function `deployFrontEnd()`.
5. Open or refresh your Cockpit dashboard on browser, if there is a **Rocket icon** in the left menu, then the addon is work!
