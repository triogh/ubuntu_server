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
    && echo "daemon off;" >> /etc/nginx/nginx.conf


# Expose ports
EXPOSE 80

# Set default command to execute when creating new container
CMD service nginx start
