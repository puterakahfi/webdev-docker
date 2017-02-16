
FROM phusion/baseimage:latest
USER root

# Add the "PHP 7" ppa
RUN apt-get update && apt-get install -y git 
# Clean up APT when done.
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

