{ pkgs }: {
	deps = [
    pkgs.php80
    pkgs.mariadb
    pkgs.nodejs-16_x
    pkgs.redis
    pkgs.tor
    pkgs.php80Packages.composer
	];
}
