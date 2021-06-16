#!/bin/bash
if [[ $# -eq 0 ]]; then
    echo "No arguments provided"
    exit 1
fi
VERSION=$1
BUILD_FOLDER=build/${VERSION}
rm -rf ${BUILD_FOLDER}
mkdir -p ${BUILD_FOLDER}

FILES=./*.php
for file in ${FILES}
do
  echo "Processing ${file} file..."
  html=$(echo ${file} | sed -e "s/\.php/\.html/g")
  php ${file} > ${html}
done

mv *.html ./${BUILD_FOLDER}
cp -r assets ${BUILD_FOLDER}

echo "Done"
echo "You can see files in ${BUILD_FOLDER}"
