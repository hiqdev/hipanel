# hiqdev/hipanel change log

## 1.0.0 - 2021-03-01

- Accounting:
	- Fix ссылка на индексе должников на инфу клиента 2021-02-01 [@sol]
- Auth:
	- Feature Добавлено отображение прав доступа 2021-02-01 [@tofid]
	- Fix api/v1/oauth/token/issue в ответе приходит массив, раньше был массив объектов 2021-02-05 [@silverfire]
	- Project Добавлено управление правами доступа 2021-02-10 [@tofid]
- Calculator:
	- Feature Доработали интерфейс калькулятора услуг 2021-02-15 [@tofid]
	- Feature можно назначать параметр селера 2021-02-17 [@tofid]
- Domains:
	- Feature отправлять письма за 2 недели, неделю, 3 дня, день до конца платного WP клиенту письма о необходимости продления 2021-02-25 [@silverfire]
	- Fix ошибка - автопродление премиум DNS включено, баланс есть, но письма продолжают сыпаться 2021-02-17 [@bladeroot]
	- Fix Усилена валидация для `url_fw` 2021-02-18 [@bladeroot]
- Finance:
	- Feature генерация Internal Invoice 2021-02-16 [@bladeroot]
	- Feature Добавлен slug для тарифного плана 2021-02-01 [@silverfire]
	- Feature панели отображение и фильтр "платёж оплачен" 2021-02-11 [@tofid]
	- Feature Переделали ивоисы: убрали платежи в текущем месяце, счет только за услуги 2021-02-18 [@bladeroot]
	- Feature привязка к реквизитам в платежах 2021-02-01 [@tofid]
	- Fix Добавлен вывод профита для конкретного покупателя 2021-02-12 [@strorch]
	- Fix медленная выборка цен при запросе `pricesSearch` без параметров 2021-02-25 [@sol]
	- Fix ошибка отображения тарифа 2021-02-01 [@sol]
- General:
	- Feature оптимизация скорости IndexPage убран запроса на count 2021-02-25 [@tofid]
	- Feature Расширили функционал экспорта в Эксель с помощью концепции "exportedColumns" 2021-02-25 [@tofid]
- Hosting:
	- Feature Биллинг бекапов VPS 2021-02-01 [@silverfire]
	- Fix Исправлена ошибка "No representative decoration class found for type ..." на странице /server/resource-list 2021-02-01 [@tofid]
	- Fix сравнение времени в сборщике трафика 2021-02-01 [@bladeroot]
- Servers:
	- Feature мелкие улучшения страницы детального просмотра серверов 2021-02-25 [@tofid]
	- Feature редактирование хардверных свойств деталей и конфигов 2021-02-22 [@tofid]
	- Fix назначение свитчей для nic'ов 2021-02-12 [@strorch]
	- Fix поиск конфигов для не аутентифицированных пользователей основываясь на переданом в запросе селере 2021-02-17 [@tofid]
	- Fix сброс чекбокса "Скрыть NIC" при выполнении действий над группой серверов 2021-02-25 [@tofid]
	- Project Реализовано управление питанием серверов 2021-02-01 [@silverfire]
- Stock:
	- Fix Убрали выдачу по API цены деталей для `with_parts` из serversSearch 2021-02-01 [@silverfire]

## [Development started] - 2015-08-13

[@sol]: https://github.com/hiqsol
[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tofid]: https://github.com/tafid
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[Development started]: https://github.com/hiqdev/hipanel/releases
[1.0.0]: https://github.com/hiqdev/hipanel/releases/tag/1.0.0
[1.0.1]: https://github.com/hiqdev/hipanel/releases/tag/1.0.1
