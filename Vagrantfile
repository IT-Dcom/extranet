# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"

  config.vm.network :private_network, ip: "192.168.50.4"

  config.vm.network :forwarded_port, guest: 8000,  host: 8000 #rails server
  config.vm.network :forwarded_port, guest: 5432,  host: 5432 #postgre
  if defined?(VagrantVbguest::Middleware)
    config.vbguest.auto_update = false
  end

  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--cpus", "1", "--memory", "512"] #best practice for vagrant is to use 1/4 of the host's memory
    vb.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"] #solve Windows Symbolic links issues
  end

  config.vm.provision "shell", privileged: false, inline: <<-SHELL
    sudo locale-gen fr_FR.UTF-8
    sudo apt-get install -y postgresql-9.3 postgresql-9.3-dbg php5
    sudo -i -u postgres psql -c "CREATE ROLE vagrant;"
    sudo -i -u postgres psql -c "ALTER ROLE vagrant WITH SUPERUSER;"
    sudo -i -u postgres psql -c "CREATE DATABASE livogis_dev;"
    sudo -i -u postgres psql -c "CREATE DATABASE livogis_test;"
    sudo -i -u postgres psql -c "GRANT ALL PRIVILEGES ON DATABASE livogis_dev TO vagrant;"

    gpg --keyserver hkp://keys.gnupg.net --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3
    curl -sSL https://get.rvm.io | bash -s stable --ruby

    source /home/vagrant/.rvm/scripts/rvm
    gem install bundler

    cd /vagrant
    bundle install

    curl get.fuelphp.com/oil | sh

    echo "alias servup='oil s -h=\"0.0.0.0\"'" >> /home/vagrant/.bashrc
    echo "alias watchsass='sass --watch /vagrant/fuel/app/assets/sass:/vagrant/public/assets/css'"
  SHELL
end
