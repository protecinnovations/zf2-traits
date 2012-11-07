#!/bin/bash

set -e

phpcs src -pn

ci/lint-check
