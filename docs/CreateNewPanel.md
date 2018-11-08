# Create new panel

This is manual to create hipanel site but it must be mostly the same for panel and hiam.

Start with copying root package from approriate existing hipanel site root project, e.g. `0domain.name`.

Fix `.env.example`, pay attention:

    HOSTS=0domain.name
    HIAM_SITE=hiam.0domain.name
    HIPANEL_URL=https://panel.0domain.name
    REAL_IP=88.208.3.112

Fix `hidev.yml`, pay attention:

    package name - 0domain.name

Fix ` composer.json`, pay attention:

    package name - 0domain.name
    namespace in autoload - ahnames\sites\site\odomainname
    require proper asset - yii2-asset-0domain
