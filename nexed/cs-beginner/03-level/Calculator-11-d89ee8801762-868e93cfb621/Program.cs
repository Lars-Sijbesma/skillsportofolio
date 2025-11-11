// See https://aka.ms/new-console-template for more information
Console.WriteLine("Operatie?");
string op = Console.ReadLine();

try
{
    if (!(op == "+" || op == "-" || op == "*" || op == "/" || op == "%"))
    {
        throw new Exception("Dat is geen geldige operatie!");
    }
}
catch (Exception e)
{
    Console.WriteLine(e.Message);
    System.Environment.Exit(0);
}

Console.WriteLine("Eerste Getal?");
float n1 = 0;

string? in1 = Console.ReadLine();

if (!float.TryParse(in1, out n1))
{
    Console.WriteLine($"{in1} is geen geldig getal!");
    System.Environment.Exit(0);
}
Console.WriteLine("Tweede Getal?");

float n2 = 0;

string? in2 = Console.ReadLine();

if (!float.TryParse(in2, out n2))
{
    Console.WriteLine($"{in2} is geen geldig getal!");
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
else if (op == "%")
{
    if (n2 == 0)
    {
        Console.WriteLine("je kan niet delen door 0");
        System.Environment.Exit(0);
    }
    res = n1 % n2;
}
else
{
    Console.WriteLine("Dat is geen geldige operatie!");
    System.Environment.Exit(0);
}

Console.WriteLine($"{n1} {op} {n2} = {res}");
