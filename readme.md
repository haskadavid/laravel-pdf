Laravel pdf package
============

Informations
---

Provider:

```php
'Haska\Pdf\PdfServiceProvider',
```

Alias:

```php
'PDF' => 'Haska\Pdf\Facade',
```

Config:

```php
php artisan config:publish haska/laravel-pdf
```

## DOMPDF Wrapper for Laravel 4

You can create a new DOMPDF instance and load a HTML string, file or view name. You can save it to a file, or stream (show in browser) or download.

    $pdf = App::make('dompdf');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();

Or use the facade:

    $pdf = PDF::loadView('pdf.invoice', $data);
    return $pdf->download('invoice.pdf');

You can chain the methods:

    return PDF::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');

You can change the orientation and paper size, and hide or show errors (by default, errors are shown when debug is on)

    PDF::loadHTML($html)->setPaper('a4')->setOrientation('landscape')->setWarnings(false)->save('myfile.pdf')

If you need the output as a string, you can get the rendered PDF with the output() function, so you can save/output it yourself.

### Tip: UTF-8 support
In your templates, set the UTF-8 Metatag:

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>