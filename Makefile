start:
	tests/bin/yii serve

docker-bash-user-1000:
	docker-compose exec --user 1000 php bash
