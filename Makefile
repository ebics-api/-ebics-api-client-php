FROM_DC := cd docker &&
DC := docker compose -p ebics-api-client-php
EXEC := $(DC) exec
DOCKER_COMPOSE_FILE := -f docker-compose.yml
BUILD := $(DC) $(DOCKER_COMPOSE_FILE) build
UP := $(DC) $(DOCKER_COMPOSE_FILE) up
DOWN := $(DC) down
PHPC := php-ebics-api-client-php
IN_DIR := --workdir /var/www/ebics-api-client-php

.PHONY: Makefile start stop build

build:
	$(FROM_DC) $(BUILD) --no-cache

start:
	$(FROM_DC) $(UP) -d

stop:
	$(FROM_DC) $(DOWN)

bash:
	$(FROM_DC) $(EXEC) $(IN_DIR) $(PHPC) bash