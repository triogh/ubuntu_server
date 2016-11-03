#!/usr/bin/env perl
# Name:
# Version:

use strict;
use warnings;

unless (scalar @ARGV == 1) {die qq|Error: at least one argument must be supplied to the script!\n|};

my $input_file = shift @ARGV;

unless ( -e $input_file && -f _ )  {die qq|Error: input file does not exist, or is not a file!\n|};
unless ( $input_file =~ /\.txt$/ ) {die qq|Error: input file must have a "*.txt" extension!\n|};

my $output_file;
($output_file = $input_file) =~ s/txt$/html/; 

my $txt2html_cmd = qq{txt2html -mosaic -infile $input_file -outfile $output_file};
system($txt2html_cmd);
