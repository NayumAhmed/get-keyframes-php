# Get Keyframes — PHP Example

A standalone PHP example project using the Composer package [mozartk/get-keyframes](https://github.com/mozartk/get-keyframes).

## Requirements

- PHP 7.4 or newer
- Composer
- FFmpeg installed and available on your system PATH (if required by the source package)

## Install

```bash
composer install
```

## Run

Place a video file in the project or supply a path to one:

```bash
php example.php ./samples/sample.mkv
```

The example prints the information returned by the package. Consult the package documentation for supported formats, options, and exact API behavior.

## Package

This project declares `mozartk/get-keyframes` as a Composer dependency. Composer resolves and installs the package into `vendor/`.

## License

This example project is provided under the MIT License. The dependency retains its own license.
