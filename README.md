# Webtech Project

The **"Web Technologies"** project aims to provide students with hands-on experience in designing, implementing, and deploying a web application using various web technologies. Students are tasked with setting up a web server environment from scratch on an Ubuntu machine provided by the professor.

By completing this project, students will gain practical experience in web development, server administration, database management, API design, version control, and teamwork, preparing them for real-world scenarios in the field of web technologies.

## Project Focus

The project focuses on the following key components:

1. **HTTP Web Server Setup**:  
   Students are required to configure Caddy as an HTTP web server to serve both static and dynamic content securely over the public internet.

2. **Dynamic Content with PHP**:  
   Implementation of dynamic behavior using PHP to handle server-side processing and interaction with a PostgreSQL database or the local file system.

3. **Frontend Development**:  
   Creation of a visually appealing and responsive frontend using HTML, CSS, and JavaScript.

4. **Database Integration and Security**:  
   Configuration of a PostgreSQL database and implementation of security measures to prevent SQL injections and ensure data integrity.

5. **RESTful Web Service**:  
   Design and implementation of a RESTful API to facilitate communication between the client-side frontend, external embedded device, and server-side components.

6. **Provisioning and Bootstrapping of a Linux Server**:  
   Proper setup and configuration of a Linux server environment, including installation of necessary dependencies and software packages for web server deployment.

7. **Git/GitHub Integration and Teamwork**:  
   Utilization of Git for version control and collaboration through GitHub, demonstrating effective teamwork and regular commits to showcase project progress.

8. **External Embedded Device Interaction**:  
   Capability for external embedded devices to interact with the server through the RESTful interface, enabling data upload and retrieval.

9. **Documentation and Presentation**:  
   Comprehensive documentation outlining project structure, setup instructions, and usage guidelines, along with a clear presentation highlighting key features and technical aspects of the project.

# My Project

With my project, I am using the **Pynq-Z2** as hardware for the Linux server. This Linux server will run a Caddy web server and a PostgreSQL database. The web server will serve HTML content and use PHP scripts to interact with the database.

## Installing Packages on Ubuntu

- `sudo apt install caddy`  
  For the web server
- `sudo apt install php php-cgi php-pgsql`  
  For handling PHP
- `sudo apt install postgresql postgresql-contrib`  
  For the database
- `sudo apt install git`  
  For version control
- `sudo apt install tailscale` *(optional)*  
  For additional networking options

## Setting Up the Webserver

For setting up the Caddy web server, two files need to be created: a `Caddyfile` and an `info.php` file. These are the standard names for the used files, and they also have standard directories. If you want to change these names or directories, you can find more information on the [Caddy website](https://caddyserver.com/).

## Setting Up the Database

If you want to learn how to set up databases, access them, and add or delete data, visit this [tutorial on W3Schools](https://www.w3schools.com/postgresql).
