#!/bin/bash

set -e

phpcs module -pn

ci/lint-check
