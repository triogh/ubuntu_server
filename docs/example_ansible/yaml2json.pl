#!/usr/bin/env perl
# Name:
# Version:

use strict;
use warnings;

use YAML;
use JSON;

# Load a YAML hash containing a scalar ref as a value.
my ($hashref) = Load(<<'END_YAML');
---
bar: ref
foo: 1
END_YAML

use Data::Dump;
dd $hashref;

my $json_text = encode_json($hashref);
