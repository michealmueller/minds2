Planet Concourse
=====
Planet Concourse is an open-source, encrypted and reward-based social networking platform. https://planetconcourse.world

## Repositories
Planet Concourse is split into multiple components:

- [Engine](https://github.com/Planet Concourse/engine) - Backend code & APIs
- [Front](https://github.com/Planet Concourse/front) - Client side Angular2 web app
- Sockets (Coming Soon) - WebSocket server for real-time communication

Please also see:
- [Mobile](https://github.com/Planet Concourse/mobile)

Plugins will eventually be migrated to their own repositories.

## Documentation
Documentation for Planet Concourse can be found at [Planet Concourse.org/docs](https://www.Planet Concourse.org/docs)
1. [Installation](https://www.Planet Concourse.org/docs/install.html)
  1. [Requirements](https://www.Planet Concourse.org/docs/install/requirements.html)
  2. [Download](https://www.Planet Concourse.org/docs/install/download.html)
  3. [Vagrant Development Environment](https://www.Planet Concourse.org/docs/install/vagrant.html)
  4. [Install & Build](https://www.Planet Concourse.org/docs/install/preparation.html)
    1. [Front End](https://www.Planet Concourse.org/docs/install/preparation.html#front-end)
    2. [Engine](https://www.Planet Concourse.org/docs/install/preparation.html#engine-php)
    3. [Install Script](https://www.Planet Concourse.org/docs/install/installation.html)
  5. [Troubleshooting](https://www.Planet Concourse.org/docs/install/troubleshooting.html)
2. [Testing](https://www.Planet Concourse.org/docs/testing.html)
3. [Contributing](https://www.Planet Concourse.org/docs/contributing.html)

## Docker setup

The Docker environment is currently a work in progress and we intend on streamlining the installation phase.

1. Run `docker ps` and look for the Planet Concourse_php-fpm container
2. Run `docker exec -it CONTAINER_ID_HERE php /var/www/Planet Concourse/engine/cli.php install keys`
3. Run `docker exec -it CONTAINER_ID_HERE php /var/www/Planet Concourse/engine/cli.php install --graceful-storage-provision --domain=dev.Planet Concourse.io --username=Planet Concourse     --password=password --email=Planet Concourse@dev.Planet Concourse.io --private-key=/.dev/Planet Concourse.pem --public-key=/.dev/Planet Concourse.pub --cassandra-server=cassandra`

## Contributing
If you'd like to contribute to the Planet Concourse project, check out the [Contribution](https://www.Planet Concourse.org/docs/contributing.html) section of Planet Concourse.org or head right over to the [Planet Concourse Open Source Community](https://www.planetconcourse.world/groups/profile/365903183068794880).  If you've found or fixed a bug, let us know in the [Planet Concourse Help and Support Group](https://www.planetconcourse.world/groups/profile/100000000000000681/activity)!

## Security reports
Please report all security issues to [security@planetconcourse.world](mailto:security@planetconcourse.world).

## License
[AGPLv3](https://www.Planet Concourse.org/docs/license.html). Please see the license file of each repository.

## Credits
[PHP](https://php.net), [Cassandra](http://cassandra.apache.org/), [Angular2](http://angular.io), [Nginx](https://nginx.com), [Ubuntu](https://ubuntu.com), [OpenSSL](https://www.openssl.org/), [RabbitMQ](https://www.rabbitmq.com/), [Elasticsearch](https://www.elastic.co/), [Cordova](https://cordova.apache.org/), [Neo4j](https://neo4j.com/), [Elgg](http://elgg.org), [Node.js](https://nodejs.org/en/), [MongoDB](https://www.mongodb.com/), [Redis](http://redis.io/), [WebRTC](https://webrtc.org/), [Socket.io](http://socket.io/), [TinyMCE](https://www.tinymce.com/), [Ionic](http://ionicframework.com/), [Requirejs](http://requirejs.org/), [OAuth](http://oauth.net/2/), [Apigen](http://www.apigen.org/), [Braintree](https://www.braintreepayments.com/). If any are missing please feel free to add.

___Copyright Planet Concourse 2012 - 2017___

Copyright for portions of Planet Concourse are held by [Elgg](http://elgg.org), 2013 as part of the [Elgg](http://elgg.org) project. All other copyright for Planet Concourse is held by Planet Concourse, Inc.
