# docker-centos7-apache2-php5.6-elasticsearch
<h2>Table of contents</h2>
<div>
<ul>
  <li>Installation</li>
  <li>Check container services and run the project</li>
  <li>Logging & Debugging</li>
  <li>Summary</li>
 </ul>
</div>
<div>
  <h2>Installation</h2>
  <ul>
    <li><a href="https://docs.docker.com/install/" target="__blank" >Install the docker first</a></li>
    <li><a href="https://docs.docker.com/compose/install/" target="__blank">Install docker-compose</a></li>
    <li>git clone https://github.com/gaurav-cpt/docker-centos7-apache2-php5.6-elasticsearch.git</li>
    <li>cd docker-centos7-apache2-php5.6-elasticsearch/</li>
    <li>docker-compose build</li>
    <li>docker-compose up -d</li>
  </ul>
</div>
<div>
  <h2>Check container services and run the project</h2>
  <ul>
    <li><b>docker ps</b> command will show the list of running images</li>
    <li><b>docker inspect literature-review-net</b> command get all the containers information including IP address</li>
    <li>get the IP of "Name": "php5.6-apache" listed last of above command in my case is "IPv4Address": "172.27.0.4/16"</li>
    <li>go to the browser and type <b>http://172.27.0.4</b> your apache page should be displayed </li>
  </ul>
</div>
<div>
  <h2>Logging & Debugging</h2>
  <ul>
    <li>docker logs {CONTAINER_ID} command will display the specific error related to the container</li>
    <li>In case if elastic search service not up check the log, on my linux system it was stuck because of low virtual memory than i used "sudo sysctl -w vm.max_map_count=262144"</li>
  </ul>
</div>
<div>
  <h2>Summary</h2>  
  <pre>
Created seperate files for centos and php under docker-files/ folder and making the centos as base image,
Using port 6551 and 6552 its upto us to choose any open port.
Overriding the httpd.conf file keeping inside docker-config/vhosts/ folder so if you want to customize the apache 
setting that we can define in this file, module re_write was not working so i added the below command and override
the container configuration file.
Include conf.modules.d/*.conf
LoadModule rewrite_module modules/mod_rewrite.so
  </pre>
</div>
