up: ## activate PHP
	docker container run \
		--name app \
		--rm \
		--interactive \
		--tty \
		--volume $(shell pwd):/src \
		chozetsu-book:app \
		bash
