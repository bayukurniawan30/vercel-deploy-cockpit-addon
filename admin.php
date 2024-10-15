<?php

$this->bindClass('VercelDeploy\\Controller\\DeployController', 'vercel-deploy');

$this->on('app.layout.init', function () {

    // Add a new menu link under the "Addons" section
    $this->helper('menus')->addLink('modules', [
        'label' => 'Vercel Deploy', // Menu label
        'icon' => 'verceldeploy:assets/icons/rocket.svg', // Icon to display
        'route' => '/vercel-deploy', // Route to your addon page
        'active' => strpos($this['route'], '/vercel-deploy') === 0, // Active if route matches
    ]);

});
