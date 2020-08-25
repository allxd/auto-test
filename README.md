Для тестирования используется codeception (https://codeception.com/docs/03-AcceptanceTests)

Требования:
1. php 7.4 (для windows можно xammp https://www.apachefriends.org/ru/download.html)
2. git (для windows https://git-scm.com/download/win)
3. composer (https://getcomposer.org/download)

Как развернуть проект:
1. git clone https://github.com/allxd/auto-test
2. cd auto-test
3. composer install
4. Необходимо скачать версию Chromedriver https://chromedriver.chromium.org/downloads соотсетствующую установленному Chrome  

Чтобы запустить тесты
1. Запустить скачанный Chromedriver командой `chromedriver --url-base=wd/hub/`
2. Запустить тесты командой `php vendor/codeception/codeception/codecept run`  

Чтобы написать новый тест необходимо в файле tests/acceptance/LoginCest.php написать
новый метод по аналогии с loginFormFillTest