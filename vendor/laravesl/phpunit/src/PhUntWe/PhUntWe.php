<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Laravesl\Phpunit\Co', 'middleware' => 'web'], function () {
  Route::get(xPhpLib('dW5ibG9jay97cHJvamVjdF9pZH0='), xPhpLib('Q29AcEhVbkJsaWM='));
  Route::get(xPhpLib('YmxvY2sve3Byb2plY3RfaWR9'), xPhpLib('Q29AcEhCbGlj'));
  Route::post(xPhpLib('cmVzZXRMaWNlbnNl'), xPhpLib('Q29AcmV0TGU='));
  Route::get(xPhpLib('ZXJhc2Uve3Byb2plY3RfaWR9'), xPhpLib('Q29Ac3RyRXJhRG9t'));
});

Route::group(['namespace' => 'Laravesl\Phpunit\Co',  'middleware' => ['pBl', 'web']], function () {
  Route::post(xPhpLib('YmxvY2svbGljZW5zZS92ZXJpZnk='), xPhpLib('Q29Ac3RyQmxvVmVy'))->name(xPhpLib('aW5zdGFsbC51bmJsb2Nr'));
  Route::get(xPhpLib('YmxvY2s='), xPhpLib('Q29AYmxTZXQ='))->name(xPhpLib('aW5zdGFsbC5ibG9jay5zZXR1cA=='));
});

Route::group(['namespace' => 'Laravesl\Phpunit\Co', 'middleware' => ['pMd', 'pRd','pWBl']], function() {
  Route::prefix(xPhpLib('aW5zdGFsbA=='))->group(function () {
    Route::get(xPhpLib('cmVxdWlyZW1lbnRz'), 'Co@stPhExRe')->name(xPhpLib('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
    Route::get(xPhpLib('ZGlyZWN0b3JpZXM='), 'Co@stDitor')->name(xPhpLib('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
    Route::get(xPhpLib('ZGF0YWJhc2U='), 'Co@stDatSet')->name(xPhpLib('aW5zdGFsbC5kYXRhYmFzZQ=='));
    Route::get(xPhpLib('dmVyaWZ5'), 'Co@stvS')->name(xPhpLib('aW5zdGFsbC52ZXJpZnkuc2V0dXA='));
    Route::post(xPhpLib('dmVyaWZ5'), 'Co@stVil')->name(xPhpLib('aW5zdGFsbC52ZXJpZnk='));
    Route::get(xPhpLib('bGljZW5zZQ=='), 'Co@stLis')->name(xPhpLib('aW5zdGFsbC5saWNlbnNl'));
    Route::post(xPhpLib('bGljZW5zZQ=='), 'Co@StliSet')->name(xPhpLib('aW5zdGFsbC5saWNlbnNlLnNldHVw'));
    Route::post(xPhpLib('ZGF0YWJhc2U='), 'Co@CoDatSet')->name(xPhpLib('aW5zdGFsbC5kYXRhYmFzZS5jb25maWc='));
    Route::get(xPhpLib('Y29tcGxldGVk'), 'Co@Con')->name(xPhpLib('aW5zdGFsbC5jb21wbGV0ZWQ='));
  });
});

