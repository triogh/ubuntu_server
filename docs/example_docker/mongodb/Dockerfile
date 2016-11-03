###################################################
# Dockerfile to build MongoDB container images
# Based on Ubuntu
###################################################

# Set the base image to Ubuntu
FROM ubuntu

# File Author / Maintainer
MAINTAINER Example McAuthor

# Update the repository sources list
RUN apt-get update

##################### BEGIN INSTALLATION ####################
# Install MongoDB Following the Instructions at MongoDB Docs
# Ref: http://docs.mongodb.org/manual/tutorial/install-mongodb-on-ubuntu/

# Add the package verification key
RUN apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv EA312927

# Add MongoDB to the repository sources list
RUN echo "deb http://repo.mongodb.org/apt/ubuntu xenial/mongodb-org/3.2 multiverse" | tee /etc/apt/sources.list.d/mongodb-org-3.2.list

# Update the repository sources list once more
RUN apt-get update

# Install MongoDB package (.deb)
RUN apt-get install -y mongodb-org

# Create the default data directory
RUN mkdir -p /data/db

# ubuntu 16.04 specific
# https://docs.mongodb.com/manual/tutorial/install-mongodb-on-ubuntu/
RUN echo "[Unit]" | tee -a /lib/systemd/system/mongod.service \
    && echo "Description=High-performance, schema-free document-oriented database" | tee -a /lib/systemd/system/mongod.service \
    && echo "After=network.target" | tee -a /lib/systemd/system/mongod.service \
    && echo "Documentation=https://docs.mongodb.org/manual" | tee -a /lib/systemd/system/mongod.service \
    && echo "" | tee -a /lib/systemd/system/mongod.service \
    && echo "[Service]" | tee -a /lib/systemd/system/mongod.service \
    && echo "User=mongodb" | tee -a /lib/systemd/system/mongod.service \
    && echo "Group=mongodb" | tee -a /lib/systemd/system/mongod.service \
    && echo "ExecStart=/usr/bin/mongod --quiet --config /etc/mongod.conf" | tee -a /lib/systemd/system/mongod.service \
    && echo "" | tee -a /lib/systemd/system/mongod.service \
    && echo "[Install]" | tee -a /lib/systemd/system/mongod.service \
    && echo "WantedBy=multi-user.target" | tee -a /lib/systemd/system/mongod.service

##################### END INSTALLATION ####################

# Expose the default port
EXPOSE 27017

# Default port to execute the entrypoint (MongoDB)
CMD ["--port 27017"]

# Set default container command
ENTRYPOINT /usr/bin/mongod

