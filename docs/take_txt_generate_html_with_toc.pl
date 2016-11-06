#!/usr/bin/env perl
# Name:
# Version:

use strict;
use warnings;

use HTML::Toc;
use HTML::TocUpdator;

use File::Copy qw/ move /;

unless (scalar @ARGV == 1) {die qq|Error: at least one argument must be supplied to the script!\n|};

my $input_txt_file = shift @ARGV;

unless ( -e $input_txt_file && -f _ )  {die qq|Error: input file does not exist, or is not a file!\n|};
unless ( $input_txt_file =~ /\.txt$/ ) {die qq|Error: input file must have a "*.txt" extension!\n|};

my $generated_html_file;
($generated_html_file = $input_txt_file) =~ s/txt$/html/; 

my $txt2html_cmd = qq{txt2html --mosaic --bullets '-' --titlefirst --caps_tag '' --use_preformat_marker --make_tables --infile $input_txt_file --outfile $generated_html_file};
system($txt2html_cmd); 


my $toc        = HTML::Toc->new();
my $tocUpdator = HTML::TocUpdator->new();

my $output_html_with_toc_file;
($output_html_with_toc_file = $generated_html_file) =~ s/^doc/doc_toc/;
$tocUpdator->insertIntoFile($toc, $generated_html_file, {outputFile => "$output_html_with_toc_file"});

unlink $generated_html_file or warn "Could not unlink $generated_html_file $!";

move($output_html_with_toc_file, $generated_html_file);
