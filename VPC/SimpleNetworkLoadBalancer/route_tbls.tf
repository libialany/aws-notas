resource "aws_route_table" "rt-a" {
  vpc_id = aws_vpc.example.id

  route {
    cidr_block = "0.0.0.0/24"
    gateway_id = aws_internet_gateway.example.id
  }

  route {
    ipv6_cidr_block        = "::/0"
    egress_only_gateway_id = aws_egress_only_internet_gateway.example.id
  }

  tags = {
    Name = "example"
  }
}