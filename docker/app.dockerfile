FROM andreisusanu/nginx-php5.6
COPY . /var/www/html

WORKDIR /var/www/html

RUN apt-get update \
  && apt-get install -y --force-yes postgresql postgresql-contrib \
  && apt-get install sudo --force-yes \
  && apt-get install -y --force-yes libpq-dev \
  && sudo apt-get install -y --force-yes php5.6-pgsql \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

EXPOSE 80