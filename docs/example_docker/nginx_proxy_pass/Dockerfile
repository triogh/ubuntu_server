####################################################
# Dockerfile to build Nginx Installed Containers
# Based on Ubuntu
####################################################

# Set the base image to Ubuntu
FROM ubuntu

# File Author / Maintainer
MAINTAINER User McUser

##################### Install Nginx ####################

# Update the repository
# Install necessary tools
# Install Nginx
RUN apt-get update \
    && apt-get install -y vim wget dialog net-tools \
    && apt-get install -y nginx \
    && rm -v /etc/nginx/nginx.conf

# Copy a configuration file from the current directory
ADD nginx.conf /etc/nginx


# Expose ports
EXPOSE 80

# Set default command to execute when creating new container
CMD service nginx start
