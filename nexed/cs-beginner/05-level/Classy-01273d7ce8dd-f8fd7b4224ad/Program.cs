Console.WriteLine("Welk woord?");
bool contains = Check.containsA(Console.ReadLine());
Console.WriteLine(contains);

class Check
{
    public static bool containsA(string word)
    {
        return word.Contains('a');
    }
}
