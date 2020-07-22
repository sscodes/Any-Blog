# Any-Blog
This is a general purpose website template, made of only HTML &amp; CSS.

UPDATE: Original color's changed, It fixed to fit on laptops for the moment and right sidebar was fixed too when resizing the page with CSS to avoid sidebar overlaps with the content of the page.

On a future I will implement a Administration Page in PHP

Some screenshots 

Head, Post and sidebar
![Index Page](/screenshots/screenshot-main.png)

Footer
![Index Page 2](/screenshots/screenshot-main-2.png)

# Running on Docker

It´s possible to deploy this website on Docker, you can install a Docker engine from their website https://docs.docker.com/desktop/ choosing your corresponding SO

Copy and paste the following code on a terminal with Docker installed and running

```
docker build -t anyblog .  
```

The next step is to run a container based on the image that we have built in the previous step, copy and paste the following code on a terminal to run a container

```
docker run -d -it -p 8000:80 anyblog
```

Open a browser and look for http://localhost:8000 , now you are able to view the website

![Index Page on Docker](/screenshots/screenshot-docker-index.png)

[Optional] In the second line of code you can change the port to another if the port is currently in use in your computer, change just the port before semicolon