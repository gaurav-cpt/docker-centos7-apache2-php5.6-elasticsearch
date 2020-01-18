#!/bin/sh
cd /var/www/html/literature-review/custom_python
exec python3 lr_process.py start rabbitMQ &
