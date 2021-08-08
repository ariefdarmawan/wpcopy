#!/bin/bash

wp db export wp-backup/latest.sql
wp db export
mv *.sql wp-backup

git add .
git commit -m "$1"
git push -u origin HEAD