# pms-18
# Advanced Techniques Project

## Dockerization of InfluxDB, OwnCloud, Grafana, and Telegraf

This project demonstrates the deployment of InfluxDB, OwnCloud, Grafana, and Telegraf using Docker. The setup includes configuring Telegraf to collect metrics from Docker and store them in InfluxDB.

### Prerequisites

- Docker
- Docker Compose

### Project Structure
.
├── docker-compose.yml
├── telegraf
│ └── telegraf.conf
└── README.md

### Services

1. **InfluxDB**: A time-series database used for storing and retrieving time series data.
2. **OwnCloud**: A file sharing server that allows you to store and access files.
3. **Grafana**: An open-source platform for monitoring and observability.
4. **Telegraf**: An agent for collecting, processing, aggregating, and writing metrics.

### Setup Instructions

#### Step : Clone the Repository

```sh
git clone https://github.com/Kstavr/pms-18.git
cd psm-18

Step 1: Installation of docker and Docker compose
•	sudo apt install -y docker.io
•	sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

systemctl enable docker
systemctl start docker


Step 2: Create and Configure docker-compose.yml
The docker-compose.yml file defines the services for InfluxDB, OwnCloud, Grafana.
version: '3.8'

services:
  owncloud:
    image: owncloud/server
    ports:
      - "8080:8080"
    volumes:
      - owncloud_data:/mnt/data
    restart: always

  grafana:
    image: grafana/grafana
    ports:
      - "3000:3000"
    restart: always

  influxdb:
    image: influxdb:2.7
    ports:
      - "8086:8086"
    environment:
      - DOCKER_INFLUXDB_INIT_MODE=setup
      - DOCKER_INFLUXDB_INIT_USERNAME=admin
      - DOCKER_INFLUXDB_INIT_PASSWORD=adminpass
      - DOCKER_INFLUXDB_INIT_ORG=myorg
      - DOCKER_INFLUXDB_INIT_BUCKET=telegraf
      - DOCKER_INFLUXDB_INIT_RETENTION=0
      - DOCKER_INFLUXDB_INIT_ADMIN_TOKEN=mytoken
    restart: always

volumes:
  owncloud_data:
  influxdb_data:



Install Telegraf native:
wget -qO- https://repos.influxdata.com/influxdb.key | sudo apt-key add -
source /etc/lsb-release
echo "deb https://repos.influxdata.com/ubuntu ${DISTRIB_CODENAME} stable" | sudo tee /etc/apt/sources.list.d/influxdb.list
sudo apt update
sudo apt install telegraf -y

systemctl enable telegraf
systemctl start telegraf

Step 3: Configure Telegraf
Create a configuration file for Telegraf (telegraf/telegraf.conf)
[global_tags]

[agent]
  interval = "10s"
  round_interval = true
  metric_batch_size = 1000
  metric_buffer_limit = 10000
  collection_jitter = "0s"
  flush_interval = "10s"
  flush_jitter = "0s"
  precision = ""
  hostname = ""
  omit_hostname = false

[[outputs.influxdb]]
  urls = ["http://localhost:8086"]
  database = "telegraf"
  username = "admin"
  password = "adminpass"
  skip_database_creation = false

[[inputs.docker]]
  endpoint = "unix:///var/run/docker.sock"
  gather_services = false
  container_names = []
  timeout = "5s"
  perdevice = true
  total = true
  docker_label_include = []
  docker_label_exclude = []


Step 4: Start the Services with the commmand: docker-compose up -d

Step 5: Access the Services
InfluxDB: Open a browser and navigate to http://localhost:8086.
OwnCloud: Open a browser and navigate to http://localhost:8080.
Grafana: Open a browser and navigate to http://localhost:3000.

Step 6: Configure Grafana
Log in to Grafana (admin/admin).

Add InfluxDB as a data source:

URL: http://influxdb:8086
Database: telegraf
User: admin
Password: adminpass
Create dashboards to visualize metrics collected by Telegraf.

Conclusion
This setup dockerizes InfluxDB, OwnCloud, Grafana, and Telegraf, allowing for easy deployment and management of these services. Telegraf collects metrics from Docker and stores them in InfluxDB, which can then be visualized using Grafana.
