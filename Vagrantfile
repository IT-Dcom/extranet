# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"

  config.vm.network :private_network, ip: "192.168.50.4"

  config.vm.network :forwarded_port, guest: 8000,  host: 8000 #rails server

  if defined?(VagrantVbguest::Middleware)
    config.vbguest.auto_update = false
  end

  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--cpus", "1", "--memory", "512"] #best practice for vagrant is to use 1/4 of the host's memory
    vb.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"] #solve Windows Symbolic links issues
  end

  config.vm.provision "shell", privileged: false, inline: <<-SHELL
    sudo locale-gen fr_FR.UTF-8
    sudo apt-get install -y php5 mysql-client php5-mysql

    gpg --keyserver hkp://keys.gnupg.net --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3 || curl -sSL https://rvm.io/mpapis.asc | gpg --import -
    curl -sSL https://get.rvm.io | bash -s stable --ruby

    source /home/vagrant/.rvm/scripts/rvm
    gem install bundler

    cd /vagrant
    bundle install

    curl get.fuelphp.com/oil | sh

    echo "alias servup='oil s -h=\"0.0.0.0\"'" >> /home/vagrant/.bashrc
    echo "alias watchsass='sass --watch /vagrant/fuel/app/assets/sass:/vagrant/public/assets/css'" >> /home/vagrant/.bashrc
  SHELL
end
