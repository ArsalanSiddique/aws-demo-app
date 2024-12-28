#!/bin/bash

sudo apt-get update
sudo apt-get install -y apache2 php libapache2-mod-php
sudo systemctl enable apache2
