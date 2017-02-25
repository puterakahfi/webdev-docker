FROM nginx:latest

ADD nginx.conf /etc/nginx/

RUN rm /etc/nginx/conf.d/default.conf 

CMD ["nginx"]
EXPOSE 80 443
