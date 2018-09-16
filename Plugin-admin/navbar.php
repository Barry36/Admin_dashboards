<?php

// This file contains the codes that show the navbar
function getNavBar(){
	$output = '
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark pink scrolling-navbar" id="page-nav">
	        <a class="navbar-brand" href="/qbank/customized-admin-panel/Plugin-admin"><strong>PharmAchieve Admin Dashboard</strong></a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <ul class="navbar-nav mr-auto">
	                <li class="nav-item">
	                    <a class="nav-link" href="/qbank/customized-admin-panel/Plugin-admin">Dashboard</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="http://localhost/qbank/customized-admin-panel/Plugin-admin/pages/templates/bar_template/bar_template.php?templates">Bar Template</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="http://localhost/qbank/customized-admin-panel/Plugin-admin/pages/templates/email_template/email_template.php?templates">Email Template</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Opinions</a>
	                </li>
	            </ul>
	        </div>
	    </nav>';
	echo $output;
}