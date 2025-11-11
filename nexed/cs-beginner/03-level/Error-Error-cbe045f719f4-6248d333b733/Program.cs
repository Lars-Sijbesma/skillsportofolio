// See https://aka.ms/new-console-template for more information
Console.WriteLine("Operatie?");
string op = Console.ReadLine();
Console.WriteLine("Eerste Getal?");
float n1 = 0;

try
{
    if (!float.Parse(Console.ReadLine(), out n1))
    {
        Console.WriteLine("dat is geen getal!");
        System.Environment.Exit(0);
    }
}
catch (FormatException e)
{
    e.PrintStackTrace();
}
Console.WriteLine("Tweede Getal?");

float n2 = 0;

if (!float.TryParse(Console.ReadLine(), out n2))
{
    Console.WriteLine("dat is geen getal!");
    System.Environment.Exit(0);
}

float res = 0f;

if (op == "+")
{
    res = n1 + n2;
}
else if (op == "-")
{
    res = n1 - n2;
}
else if (op == "*")
{
    res = n1 * n2;
}
else if (op == "/")
{
    if (n2 == 0)
    {
        Console.WriteLine("je kan niet delen door 0");
        System.Environment.Exit(0);
    }
    res = n1 / n2;
}
else
{
    Console.WriteLine("Dat is geen geldige operatie!");
    System.Environment.Exit(0);
}

Console.WriteLine("Welk Getal?");
string n1 = Console.ReadLine();
int n2 = 0;
if (int.TryParse(n1, out n2))
{
    if (n2 % 2 == 0)
    {
        Console.WriteLine("Nummer is even");
    }
    else
    {
        Console.WriteLine("Nummer is oneven");
    }
}

Console.WriteLine($"{n1} {op} {n2} = {res}");
