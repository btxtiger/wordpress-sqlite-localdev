#!/bin/bash

# macOS only
# open http://localhost:4455

# Opening web browser with python shoud work on most platforms
python -mwebbrowser http://localhost:4455

# Start local php dev server
php -S localhost:4455 -t ./public/
