# nam-yii2-aws
Connect to EC2
ssh -i "nam-keypair.pem" ec2-user@ec2-34-239-139-92.compute-1.amazonaws.com
Find what systems is running: cat /etc/os-release

UPLOAD FILE TO EC2
cd nam-yii2-aws
scp -i nam-keypair.pem frontend/web/assets/flags/* ec2-user@ec2-34-239-139-92.compute-1.amazonaws.com:/app/frontend/web/assets/flags/

Install docker
sudo dnf remove docker

sudo dnf install docker-

sudo systemctl start docker.service #<-- start the service
sudo systemctl stop docker.service #<-- stop the service
sudo systemctl restart docker.service #<-- restart the service
sudo systemctl status docker.service #<-- get the service status

VERIFY: sudo docker run hello-world


Install docker compose plugin
DOCKER_CONFIG=${DOCKER_CONFIG:-$HOME/.docker}
mkdir -p $DOCKER_CONFIG/cli-plugins
curl -SL https://github.com/docker/compose/releases/download/v2.23.3/docker-compose-linux-x86_64 -o $DOCKER_CONFIG/cli-plugins/docker-compose
chmod +x $DOCKER_CONFIG/cli-plugins/docker-compose
docker compose version
Docker Compose version v2.23.3

docker ps
docker compose run <container name> /bin/bash

Change permissions
chmod 777 /app/frontend/web/assets
chmod 777 /app/frontend/web/documents
chmod 777 /app/frontend/runtime
chmod 777 /app/backend/web/assets
chmod 777 /app/backend/runtime



  git init
  git add README.md
  git commit -m "first commit"
  git branch -M main
  git remote add origin https://github.com/sea-lion/nam-yii2-aws.git
  git push -u origin main


Get directories from Github repository
cd /appfrontend/web/assets
wget --no-verbose --no-parent --recursive --level=1 \
--no-directories --no-host-directories \
--no-clobber --continue https://github.com/sea-lion/nam-yii2-aws/tree/main/frontend/assets/
