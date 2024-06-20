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

#### Step 1: Clone the Repository

```sh
git clone https://github.com/Kstavr/pms-18.git
cd psm-18

Step 2: Create and Configure docker-compose.yml
The docker-compose.yml file defines the services for InfluxDB, OwnCloud, Grafana, and Telegraf.

Step 3: Configure Telegraf
Create a configuration file for Telegraf (telegraf/telegraf.conf)

Step 4: Start the Services with the commmand: docker-compose up -d

Step 5: Access the Services
InfluxDB: Open a browser and navigate to http://localhost:8086.
OwnCloud: Open a browser and navigate to http://localhost:8080.
Grafana: Open a browser and navigate to http://localhost:3000.


Conclusion
This setup dockerizes InfluxDB, OwnCloud, Grafana, and Telegraf, allowing for easy deployment and management of these services. Telegraf collects metrics from Docker and stores them in InfluxDB, which can then be visualized using Grafana.
