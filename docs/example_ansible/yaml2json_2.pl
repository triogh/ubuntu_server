#!/usr/bin/env perl
# Name:
# Version:

use strict;
use warnings;

use YAML;
use JSON;

my $slurped;

{
local $/ = undef;
$slurped = <DATA>;
}

# Load a YAML hash containing a scalar ref as a value.
my ($hashref) = Load($slurped);

use Data::Dump;
dd $hashref;

my $json_text = encode_json($hashref);

__DATA__
---
- hosts: droplets
  tasks:
    - name: Installs nginx web server
      apt: pkg=nginx state=installed update_cache=true
      notify:
        - start nginx

  handlers:
    - name: start nginx
      service: name=nginx state=started

