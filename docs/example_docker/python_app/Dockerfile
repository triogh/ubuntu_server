############################################################
# Dockerfile to build Python WSGI Application Containers
# Based on Ubuntu
############################################################

# Set the base image to Ubuntu
FROM ubuntu

# File Author / Maintainer
MAINTAINER Maintaner Name

# Update the sources list
# Install basic applications
# Install Python and Basic Python Tools
RUN apt-get update \
	&& apt-get install -y tar git curl nano wget dialog net-tools build-essential \
	&& apt-get install -y python python-dev python-distribute python-pip

# Copy the application folder inside the container
# Note: If you want to deploy from an online host git repository, you can use the following command to clone:
# RUN git clone [application repository URL]
ADD /my_application /my_application

# Get pip to download and install requirements
RUN pip install -r /my_application/requirements.txt

# Expose ports
EXPOSE 80

# Set the default directory where CMD will execute
WORKDIR /my_application

# Set the default command to execute
# When creating a new container
# i.e. using CherryPy to serve the application
CMD python server.py
