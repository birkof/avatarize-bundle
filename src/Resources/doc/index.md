AvatarizeBundle Documentation
=============

Symfony 3, 4 bundle for generating initials avatars from names.


Installation
------------

You just require using composer and you're good to go!
````bash
composer require birkof/avatarize
````

### Full configuration

No configuration needed at this moment.

Usage Example
--------------

### Twig Filter

````twig
{{ 'Jason Statham' | avatarize(2, true) }}
````

### Twig Function

````twig
{{  avatarize('Jason Statham', 2, false) }}
````

>First parameter sets the length of the generated initials. (default: 2)

>Second parameter set if should keep lettercase on name. (default: false)


### Service

TBD.