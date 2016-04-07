## example

### Software
you need to install [Docker](https://docs.docker.com/linux/), [Docker Machine](https://docs.docker.com/machine/) and [Docker Compose](https://docs.docker.com/compose/)

### Create a machine
Let's create a simple machine called `local-machine` with this command:
```
docker-machine create --driver virtualbox local-machine 
```
(this create a new virtualbox VM )

### Using the VM
In order to use the VM you have to run 
```
eval $(docker-machine env local-machine)
```
In this way environment variables will be evaluate and docker will "send" command to the VM.

### Run containers
Inside the directory `example` run: 
```
docker-compose -f docker-compose.yml up -d
```
The options:
```
  -f specify the file (not necessary, because docker-compose search a file called "docker-compose.yml"
  -d run all the containers in backgroud
  up run the containers
``` 
The `up` command creates the images, and runs the containers. If `docker-compose.yml` change, `up` command recreates the images and run the new containers using the new images.

### Logs
When the containers are running, you can see the logs of all the container using `docker-compose logs`

### Stop containers
To stop the containers run `docker-compose stop`


### Create a Droplet on DigitalOcean
If you have a `access token` you can run
```
docker-machine create --driver digitalocean --digitalocean-access-token="your_private_access_token" --digitalocean-size="512mb" --digitalocean-region="fra1" --digitalocean-image="debian-8-x64" docker-pnlug
```
Now you can run `eval $(docker-machine env docker-pnlug)` and run your containers remotely !
