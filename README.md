yii-hashids
===========

YII Extension for the [Hashids](https://github.com/ivanakimov/hashids.js) library

Put the yii-hashids folder into the extensions folder.

#### Configuration

```php
'components' => array(
  ...
  'hashids' => array(
    'class' => 'application.extensions.yii-hashids.CHashIDs',
  ),
  ...
)
```

#### Usage

```php
// get hashid from numerical ID
Yii::app()->hashids->encrypt(<id>)

// get back the ID from the hashid
Yii::app()->hashids->decrypt(<hashid>)
```
