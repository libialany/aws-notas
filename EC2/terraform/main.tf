
resource "aws_instance" "Admin" {
  ami           = "ami-026b57f3c383c2eec" # us-west-2
  instance_type = "t2.micro"

  network_interface {
    network_interface_id = aws_network_interface.foo.id
    device_index         = 0
  }

  credit_specification {
    cpu_credits = "unlimited"
  }
}


resource "aws_instance" "web-server-a" {
  ami           = "ami-026b57f3c383c2eec" # us-west-2
  instance_type = "t2.micro"

  network_interface {
    network_interface_id = aws_network_interface.foo.id
    device_index         = 0
  }

  credit_specification {
    cpu_credits = "unlimited"
  }
}


resource "aws_instance" "web-server-b" {
  ami           = "ami-026b57f3c383c2eec" # us-west-2
  instance_type = "t2.micro"

  network_interface {
    network_interface_id = aws_network_interface.foo.id
    device_index         = 0
  }

  credit_specification {
    cpu_credits = "unlimited"
  }
}