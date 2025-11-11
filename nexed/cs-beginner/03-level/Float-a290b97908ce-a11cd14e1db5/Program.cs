// See https://aka.ms/new-console-template for more information
Console.WriteLine("Eerste getal?");
di n1 = 0;

if (!float.TryParse(Console.ReadLine(), out n1))
{
    Console.WriteLine("Dat is geen getal!");
    System.Environment.Exit(1);
}

Console.WriteLine("Tweede getal");

float n2 = 0;

if (!float.TryParse(Console.ReadLine(), out n2))
{
    Console.WriteLine("Dat is geen getal!");
    System.Environment.Exit(1);
}

Console.WriteLine("Resultaat:");
Console.WriteLine(n1 * n2);
