#! /bin/sh

# the silent curl make sure we don't print any error messags
# the -I, --head Fetch the headers only! HTTP-servers feature the command HEAD which this uses to get nothing but the header  of  a  document.  
# When used on an FTP or FILE file, curl displays the file size and last modification time only.
# the grep -o forces to find a pattern to print something and the -E looks for patterns
# Then i use some regex magic to find only the
if [ ! -z $1 ]; then
	curl --silent -I $1 | grep -oE "[a-z]+:/+([0-9a-zA-Z_\./]|-)+"
fi